using UnityEngine;
using System.Collections;

public class CollectAll : MonoBehaviour {

    public GameObject CollectAllObject;
    // Use this for initialization
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {

    }

    public void appear()
    {
        CollectAllObject.SetActive(true);
    }

    public void disappear()
    {
        CollectAllObject.SetActive(false);
    }
}