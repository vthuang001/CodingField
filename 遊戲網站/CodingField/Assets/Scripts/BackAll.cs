using UnityEngine;
using System.Collections;

public class BackAll : MonoBehaviour {

    public GameObject BackAllObject;
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
        BackAllObject.SetActive(true);
    }

    public void disappear()
    {
        BackAllObject.SetActive(false);
    }
}