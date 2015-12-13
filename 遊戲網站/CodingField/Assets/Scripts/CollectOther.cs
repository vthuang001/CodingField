using UnityEngine;
using System.Collections;

public class CollectOther : MonoBehaviour
{

    public GameObject CollectOtherObject;
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
        CollectOtherObject.SetActive(true);
    }

    public void disappear()
    {
        CollectOtherObject.SetActive(false);
    }
}